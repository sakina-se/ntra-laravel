<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function toggleBookmark($id): \Illuminate\Http\RedirectResponse
    {
        $user = auth()->user();
        if ($user->bookmarkedAds()->where('ad_id', $id)->exists()) {
            $user->bookmarkedAds()->detach($id);
            return back()->with('message', "E'lon o'chirildi");
        } else {
            $user->bookmarkedAds()->attach($id);
            return back()->with('message', "E'lon qo'shildi");
        }
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(User::all());
    }
}
