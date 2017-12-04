Route::get('weight_chart_data', function () {
    $stats = DB::table('weights')   
      ->orderBy('w_date', 'ASC')
      ->get(['w_date','amt']);
    return $stats;
  });




select('cate',
            DB::raw('SUM(expense) as price'),
            DB::raw('SUM(expense)-300 as price2'),
            DB::raw('CONCAT(month(spend_date),"月") as m')

            )
