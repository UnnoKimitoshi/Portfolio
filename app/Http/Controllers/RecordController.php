<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Services\RecordService;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    protected $recordService;

    public function __construct(RecordService $recordService)
    {
        $this->recordService = $recordService;
    }

    // ランキングの取得
    public function get()
    {
        $records = Record::query()->orderByDesc('score')->take(10)->get(['name', 'score']);
        $retJson = [
            'records' => $records,
        ];

        return response()->json($retJson);
    }

    //　ランクインの判定
    public function checkRankin(Request $request)
    {
        // 自身の順位を取得
        $rank = $this->recordService->getScoreRank($request['score']);
        // 10位以内ならランクイン
        $rankIn = false;
        if ($rank <= 10) {
            $rankIn = true;
        }
        $retJson = [
            'rankIn' => $rankIn,
            'rank' => $rank,
        ];
        return response()->json($retJson);
    }

    // 登録
    public function regist(Request $request)
    {
        $this->recordService->registRecord($request);
        $retJson = [
            'result' => true,
        ];
        return response()->json($retJson);
    }
}
