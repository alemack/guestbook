<?php

namespace App\Services\Record;

use App\Models\Record;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        try {
            Db::beginTransaction();

            $record = Record::create($data);

            DB::commit();
        }
        catch (\Exception $exeption)
        {
            DB::rollBack();

            return $exeption->getMessage();
        }

        return $record;
    }

    public function update($record, $data)
    {
        try {
            Db::beginTransaction();

            $record->update($data);

            DB::commit();
        }
        catch (\Exception $exeption)
        {
            DB::rollBack();

            return $exeption->getMessage();
        }

        return $record->fresh();
    }
}
