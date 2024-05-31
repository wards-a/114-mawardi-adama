<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::allows('admin', auth()->user()->role_id)) {
            return $this->fetchQuotationForTable();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quotation');
    }

    public function createQuoByOrder(string $id){
        $order = Order::find(decrypt($id));

        $order->order_items;
        
        return view('admin.quotation', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $carbon = Carbon::createFromFormat('d/m/Y', $formData['quotation_date']);
        $formatted_date = $carbon->format('Y-m-d');

        Quotation::create([
            'order_id' => $formData['order_id'],
            'reference' => $formData['quotation_reference'],
            'issue_date' => $formatted_date,
            'notes' => $formData['notes'],
            'created_by' => auth()->user()->id
        ]);

        return response()->json([
            'message' => 'Success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getOrdersWithoutQuo() {
        $orders = Order::whereDoesntHave('quotation')
        ->select(
            'customer_name',
            'customer_address',
            'phone_number',
            DB::raw('date_format(created_at, "%d/%m/%Y")'),
            'id'
        )
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $table_heads = ['Nama Pemesan', 'Alamat', 'Kontak', 'Diajukan Pada'];
        $table_actions = [
            [
                'name' => 'Buat Quo',
                'route' => 'quotation.create.by.order',
            ],
            [
                'name' => 'Detail',
                'route' => 'quotation.show',
            ]
        ];

        return view('admin.quotation', compact('orders', 'table_heads', 'table_actions'));
    }

    private function fetchQuotationForTable(){
        $table_heads = ['Nama Pemesan', 'Kontak', 'Referensi', 'Dikeluarkan Pada'];
        $table_actions = [
            [
                'name' => 'Detail',
                'route' => 'quotation.show',
            ],
            [
                'name' => 'remove',
                'route' => '/quotation',
            ]
        ];

        $quotations = Quotation::select(
            'o.customer_name',
            'o.phone_number',
            'quotations.reference',
            DB::raw('date_format(quotations.issue_date, "%d/%m/%Y")'),
            'quotations.id'
        )
        ->leftJoin('orders as o', 'o.id', '=', 'quotations.order_id')
        ->orderBy('quotations.created_at', 'desc')
        ->paginate(10);

        return view('admin.quotation', compact('table_heads', 'table_actions', 'quotations'));
    }
}
