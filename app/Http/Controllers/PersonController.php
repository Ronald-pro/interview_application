<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $all_person = Person::all();
        return view('person', compact('all_person'));
    }

    public function add_person(Request $request)
    {
        $add = new Person;

        $add->name = $request->name;
        $add->age = $request->age;
        $add->gender = $request->gender;
        $add->willing = $request->willing;
        $language_value = $request->language;
        $add->language = implode(',', $language_value);

        $add->save();

        if($add)
        {
            return view('person')->with('Message', 'Person successfully saved');
        }else{
            return back();
        }

    }

    public function edit_person(Request $request)
    {
        $person = Person::where('id', $request->id)
        $add->name = $request->name;
        $add->age = $request->age;
        $add->gender = $request->gender;
        $add->willing = $request->willing;
        $language_value = $request->language;
        $add->language = implode(',', $language_value);

        $person->update();

        if($person)
    {
        return view('person')->with('Message', 'Person Details Editted Successfully');
    }else{
        return back();
    }
    }
}
