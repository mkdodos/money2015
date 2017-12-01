Route::get('weight_chart_data', function () {
    $stats = DB::table('weights')   
      ->orderBy('w_date', 'ASC')
      ->get(['w_date','amt']);
    return $stats;
  });




 $stats = DB::table('spending')
        ->select('cate',DB::raw('SUM(expense) as price'),DB::raw('month(spend_date) as m'))
        ->groupBy('cate')
        ->groupBy(DB::raw('month(spend_date)'))
        ->whereRaw('year(spend_date)=2017')
        // ->where('cate','=','159')//水
        ->Where('cate','=','122')//電
        ->get();
