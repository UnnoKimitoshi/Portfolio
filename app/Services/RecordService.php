<?php

namespace App\Services;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordService
{
    // スコアの順位を取得する
    public function getScoreRank($score)
    {
        // スコア以上の記録を取得
        $query = Record::query()->where('score', '>=', (int)$score);
        $records = $query->get()->toArray();
        // スコアの順位はレコード＋1(自身)
        return count($records) + 1;
    }

    // 登録する
    public function registRecord(Request $request)
    {
        $registRecord = new Record();
        $registRecord->name = $request['name'];
        $registRecord->score = $request['score'];
        $registRecord->save();
    }
}
