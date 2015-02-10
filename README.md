# money2015

<!-- 依據有無傳id,決定表單為open或modal -->
    @if(isset($row->id))
    {{Form::model(
      $row,
      array(
      'route' => array('notebook.update', $row->id),
      'method' => 'PUT'
      )
    )}}
 
    @else
    {{ Form::open(
      array(
      'route' => array('notebook.store'),
      'method' => 'POST'
      )
    )}}
    @endif
 
      <!-- 儲存鈕 -->
      <div>
        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>儲存</strong></button>
      </div>
      <!-- 日期 -->
      <div class="form-group"><label>日期</label>
        {{ Form::text('note_date', null, array('class' => 'form-control')) }}
      </div>
      <!-- 標題 -->
      <div class="form-group"><label>標題</label>
        {{ Form::text('title', null, array('class' => 'form-control')) }}
      </div>
      <!-- 內容 -->
      <div class="form-group">
        <label>內容</label>
        {{ Form::textarea('content', null, array('id' => 'desc')) }}
      </div>
 
    {{ Form::close() }}<br>
