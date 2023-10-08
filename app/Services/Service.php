<?php

namespace App\Services;

class Service
{

    public function update ($user , $data, $accessories) {
        $accessories->update([
            'processor_id' => $data['processor'],
            'video_card_id' => $data['videocard'],
        ]);
        $user->update($data);
    }
}
