Route::get('weight_chart_data', function () {
    $stats = DB::table('weights')   
      ->orderBy('w_date', 'ASC')
      ->get(['w_date','amt']);
    return $stats;
  });
