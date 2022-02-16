<?php
namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::all();
        return view("admins.company", [
          "company" => $company
      ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function validateRequest($request)
    {
        $request->validate([
            'company_name'     => 'required',
            'company_email'     => 'required',
            'company_website'     => 'required',
            'company_logo'     => 'required',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images', $filename);
        }
                     Company::create([
                    "company_name"    => $request->company_name,
                    "company_email"       =>$request->company_email,
                    "company_website"    =>$request->company_website,
                    "company_logo" => $filename,
                ]);
                    //  return "done";
                    return redirect("/company");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyedit = Company::where("id", $id)->get()->first();
        return view("admins.company-edit", [
            "company" => $companyedit
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest($request);
        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images', $filename);
        }
        Company::where("id", $id)->update([
            "company_name"    => $request->company_name,
            "company_email"       =>$request->company_email,
            "company_website"    =>$request->company_website,
            "company_logo" => $filename,
            ]);
            return redirect("/company");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $x = Company::where("id", $id)->delete();
        return redirect("/company");
    }
}