<?php

namespace App\Http\Controllers;

use App\Models\Value;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Mappers\ChirpstackUplinkMapper;
use App\Mappers\UplinkMapperInterface;
use Illuminate\Http\Request;
use App\Models\Devices;
use App\Models\Uplink;


class ValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    public function chirpstack(Request $request)
    {
         if ($request->query('event') == 'up') {
             $mapper = new ChirpstackUplinkMapper($request->all());
 
             return $this->storeUplink($mapper);
         }
         return response(null, 204);
    }

    private function storeUplink(UplinkMapperInterface $mapper)
    {
        $data = [
            'device_id' => $mapper->getDeviceId(),
            'date' => $mapper->getTime()->toDateString(),
            'port' => $mapper->getPort(),
            'port' => $mapper->getPort(),
            'port' => $mapper->getPort(),
            'port' => $mapper->getPort(),
            'port' => $mapper->getPort(),
        ];

        // payload
        $payload = $mapper->getPayload();
        $uplink = Uplink::create($data, [
            'payloads' => [],
        ]);
        $uplink->payloads = $payload;
        $uplink->save();

        // device
        $device = Devices::firstOrCreate([
            'device_eui' => $mapper->getEui(),
        ], [
            'device_id' => $mapper->getDeviceId(),
            'name' => null,
            'timezone' => 'Asia/Jakarta',
            'status' => 'active',
            'device_class' => null,
            'device_normal_interval' => null,
            'device_alert_interval' => null,
            'latest_payload' => [],
            'latest_payload_at' => null
        ]);

        // save payload to device
        $device->latest_payload = $payload;
        $device->latest_payload_at = $uplink->created_at;
        $device->save();

        // Status change from port
        if ($data['port'] == 3) {
            $status = 'onrepair';
        } else if ($data['port'] == 2) {
            $status = 'danger';
        } else if ($data['port'] == 1) {
            $status = 'active';
        }
        // if (isset($status)) {
        //     if ($device->status != $status) {
        //         event(new \App\Events\DeviceStatusChanged($device, $status));
        //     }
        //     $device->status = $status;
        //     $device->save();
        // }
    }
}