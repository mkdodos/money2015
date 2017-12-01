Route::get('weight_chart_data', function () {
    $stats = DB::table('weights')
    // ->whereRaw('weekday(w_date)=1 or weekday(w_date)=4')
      ->orderBy('w_date', 'ASC')
      ->get(['w_date','amt']);
    return $stats;
  });
