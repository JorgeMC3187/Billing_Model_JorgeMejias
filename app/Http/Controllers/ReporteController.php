<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;
class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturas.index');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBill()
    {
        //

        $bills = DB::table("tbl_facturaproducto")
        ->join("tbl_facturas", "tbl_facturaproducto.id_factura", "=", "tbl_facturas.id")
        ->select("tbl_facturaproducto.*", "tbl_facturas.*")
        ->get();

        //return $bills;         
        return view('facturas.listafactura', compact('bills'));
    }

   
  
    public function getBillbyUser()
    {
        //
        $billsuser = DB::table("tbl_facturas")
        ->join("users", "tbl_facturas.id", "=", "users.id")
        ->select("tbl_facturas.*","users.*")
        ->get();

        //return $billsuser;

        return view('facturas.usuariosfactura', compact('billsuser'));
    }

    public function getBillbyProduct()
    {
        //
        $billsprod = DB::table("tbl_facturaproducto")
        ->join("tbl_facturas", "tbl_facturaproducto.id_factura", "=", "tbl_facturas.id")
        ->join("tbl_producto", "tbl_facturaproducto.cod_producto", "=", "tbl_producto.cod_producto")
        ->select("tbl_facturaproducto.*", "tbl_facturas.*", "tbl_producto.*")
        ->get();

        //return $billsprod; 
        return view('facturas.productosfactura', compact('billsprod'));
    }


}
