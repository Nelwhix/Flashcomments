<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function search(Request $request, $topic_id) {
        $sum = array_sum($request->all());
        
        foreach ($request->except('_token') as $key => $value) {
            $languages = Languages::where('title', $key)->first();
            if (empty($value)) {
                $value = 0;
            }
            $comment_contents[] = Comments::inRandomOrder()
                ->where('topic_id', $topic_id)
                ->where('language_id', $languages->id)
                ->limit($value)
                ->get();
            
        }
        foreach ($comment_contents as $row) {
            $contents[]=$row->toArray();
        }
        foreach ($contents as $value) {
            $content[] = array_column($value, 'content');
        }
        $finalArray = call_user_func_array('array_merge', $content);
        shuffle($finalArray);
        return view('checkout', [
            'comments_num' => $sum,
            'comment_contents' => $finalArray
        ]);
    }
}