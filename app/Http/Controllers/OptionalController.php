<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\Country;
use App\Model\Product;
use App\Model\State;
use Illuminate\Http\Request;

class OptionalController extends Controller
{
    public function country()
    {
        $country = Country::all();
        return response()->json($country);
    }

    public function state($country_id)
    {
        $state = State::where('country_id', '=', $country_id)->get();
        return response()->json($state);
    }

    public function city($state_id)
    {
        $city = City::where('state_id', '=', $state_id)->get();
        return response()->json($city);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->input('searchQ');
            $condition = Product::where('title', 'like', '%' . $query . '%')
            ->orWhere('brand', 'like', '%' . $query . '%')->get();
            if (count($condition) > 0) {
                return response()->json(['match' => 'found', 'product' => $condition]);
            } else {
                return response()->json(['match' => 'not found']);
            }
        }
    }
}
