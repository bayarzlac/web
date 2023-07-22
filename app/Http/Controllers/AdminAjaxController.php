<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JournalEditionContents;

class AdminAjaxController extends Controller
{
    //
    public function removeJournalArticle($id)
    {
        $removable = JournalEditionContents::find($id);

        if ($removable) {
            $removable->delete();
            return response()->json(['success' => 'Өгүүлэл тухайн дугаараас хасагдлаа']);
        }
        else {
            return response()->json(['warning' => 'Аль хэдийн хасагдсан эсвэл хасах боломжгүй байна.']);
        }
    }
}