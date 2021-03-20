{"filter":false,"title":"index.blade.php","tooltip":"/mynews/resources/views/admin/profile/index.blade.php","undoManager":{"mark":72,"position":72,"stack":[[{"start":{"row":0,"column":0},"end":{"row":61,"column":15},"action":"insert","lines":["@extends('layouts.admin')","@section('title','登録済みニュースの一覧')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>ニュース一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\NewsController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\NewsController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value=\"{{ $cond_title }}\">","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"admin-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">タイトル</th>","                                <th width=\"50%\">本文</th>","                                <th width=\"10%\">操作</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                               <tr>","                                   <th>{{ $news->id }}</th>","                                   <td>{{ Str_limit($news->title, 100) }}</td>","                                   <td>{{ Str_limit($news->body, 250) }}</td>","                                   <td>","                                       <div>","                                           <a href=\"{{ action('Admin\\NewsController@edit',['id' => $news->id]) }}\">編集</a>","                                       </div>","                                       <div>","                                           <a href=\"{{ action('Admin\\NewsController@delete',['id' => $news->id]) }}\">削除</a>","                                       </div>","                                   </td>","                            　 </tr>","                            　 @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","    @endsection"],"id":1}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["ス"],"id":2},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["ュ"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["ニ"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":22},"action":"insert","lines":["プロフィール"],"id":3},{"start":{"row":6,"column":22},"end":{"row":6,"column":24},"action":"insert","lines":["一覧"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["一"],"id":4},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["覧"]}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["s"],"id":5},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"remove","lines":["w"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"remove","lines":["e"]},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"remove","lines":["N"]}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["P"],"id":6},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["r"]},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"insert","lines":["o"]}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":45},"action":"remove","lines":["Pro"],"id":7},{"start":{"row":10,"column":42},"end":{"row":10,"column":49},"action":"insert","lines":["Profile"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["N"],"id":8}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["e"],"id":9},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["w"]},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["s"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["P"],"id":10},{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["r"]},{"start":{"row":13,"column":49},"end":{"row":13,"column":50},"action":"insert","lines":["o"]},{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"insert","lines":["f"]},{"start":{"row":13,"column":51},"end":{"row":13,"column":52},"action":"insert","lines":["i"]},{"start":{"row":13,"column":52},"end":{"row":13,"column":53},"action":"insert","lines":["l"]},{"start":{"row":13,"column":53},"end":{"row":13,"column":54},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["ル"],"id":11},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":["ト"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["イ"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["タ"]}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"insert","lines":["s"],"id":12},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"insert","lines":["i"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"insert","lines":["m"]},{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"insert","lines":["e"]},{"start":{"row":15,"column":52},"end":{"row":15,"column":53},"action":"insert","lines":["i"]}],[{"start":{"row":15,"column":53},"end":{"row":15,"column":54},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":15,"column":53},"end":{"row":15,"column":54},"action":"remove","lines":[" "],"id":14},{"start":{"row":15,"column":52},"end":{"row":15,"column":53},"action":"remove","lines":["i"]},{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["e"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":["m"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["i"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["s"]}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":50},"action":"insert","lines":["氏名"],"id":15}],[{"start":{"row":17,"column":83},"end":{"row":17,"column":84},"action":"remove","lines":["e"],"id":16},{"start":{"row":17,"column":82},"end":{"row":17,"column":83},"action":"remove","lines":["l"]},{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"remove","lines":["t"]},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"remove","lines":["i"]},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"remove","lines":["t"]},{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"remove","lines":["_"]},{"start":{"row":17,"column":77},"end":{"row":17,"column":78},"action":"remove","lines":["d"]},{"start":{"row":17,"column":76},"end":{"row":17,"column":77},"action":"remove","lines":["n"]},{"start":{"row":17,"column":75},"end":{"row":17,"column":76},"action":"remove","lines":["o"]},{"start":{"row":17,"column":74},"end":{"row":17,"column":75},"action":"remove","lines":["c"]}],[{"start":{"row":17,"column":74},"end":{"row":17,"column":75},"action":"insert","lines":["n"],"id":17},{"start":{"row":17,"column":75},"end":{"row":17,"column":76},"action":"insert","lines":["a"]},{"start":{"row":17,"column":76},"end":{"row":17,"column":77},"action":"insert","lines":["m"]},{"start":{"row":17,"column":77},"end":{"row":17,"column":78},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"remove","lines":["e"],"id":18},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"remove","lines":["l"]},{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"remove","lines":["t"]},{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"remove","lines":["i"]},{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"remove","lines":["t"]},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"remove","lines":["_"]},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"remove","lines":["d"]},{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"remove","lines":["n"]},{"start":{"row":17,"column":92},"end":{"row":17,"column":93},"action":"remove","lines":["o"]},{"start":{"row":17,"column":91},"end":{"row":17,"column":92},"action":"remove","lines":["c"]}],[{"start":{"row":17,"column":91},"end":{"row":17,"column":92},"action":"insert","lines":["n"],"id":19},{"start":{"row":17,"column":92},"end":{"row":17,"column":93},"action":"insert","lines":["a"]},{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"insert","lines":["m"]},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"insert","lines":["e"]}],[{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"remove","lines":["s"],"id":20},{"start":{"row":28,"column":32},"end":{"row":28,"column":33},"action":"remove","lines":["w"]},{"start":{"row":28,"column":31},"end":{"row":28,"column":32},"action":"remove","lines":["e"]},{"start":{"row":28,"column":30},"end":{"row":28,"column":31},"action":"remove","lines":["n"]}],[{"start":{"row":28,"column":30},"end":{"row":28,"column":31},"action":"insert","lines":["p"],"id":21},{"start":{"row":28,"column":31},"end":{"row":28,"column":32},"action":"insert","lines":["r"]},{"start":{"row":28,"column":32},"end":{"row":28,"column":33},"action":"insert","lines":["o"]},{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"insert","lines":["f"]},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"insert","lines":["i"]},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"insert","lines":["l"]},{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"insert","lines":["e"]}],[{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["D"],"id":22},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["I"]}],[{"start":{"row":33,"column":48},"end":{"row":33,"column":50},"action":"insert","lines":["氏名"],"id":23}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":52},"action":"remove","lines":["ル"],"id":24},{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"remove","lines":["ト"]},{"start":{"row":34,"column":49},"end":{"row":34,"column":50},"action":"remove","lines":["イ"]},{"start":{"row":34,"column":48},"end":{"row":34,"column":49},"action":"remove","lines":["タ"]}],[{"start":{"row":34,"column":48},"end":{"row":34,"column":50},"action":"insert","lines":["性別"],"id":25}],[{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"remove","lines":["文"],"id":26},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"remove","lines":["本"]}],[{"start":{"row":35,"column":48},"end":{"row":35,"column":50},"action":"insert","lines":["趣味"],"id":27}],[{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"remove","lines":["作"],"id":28},{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"remove","lines":["操"]}],[{"start":{"row":36,"column":48},"end":{"row":36,"column":50},"action":"insert","lines":["自己"],"id":29},{"start":{"row":36,"column":50},"end":{"row":36,"column":52},"action":"insert","lines":["紹介"]}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"insert","lines":["乱"],"id":30}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"remove","lines":["乱"],"id":31}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"insert","lines":["欄"],"id":32}],[{"start":{"row":33,"column":44},"end":{"row":33,"column":45},"action":"remove","lines":["0"],"id":33}],[{"start":{"row":33,"column":43},"end":{"row":33,"column":44},"action":"remove","lines":["1"],"id":34}],[{"start":{"row":33,"column":43},"end":{"row":33,"column":45},"action":"insert","lines":["20"],"id":35}],[{"start":{"row":34,"column":44},"end":{"row":34,"column":45},"action":"remove","lines":["0"],"id":36},{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"remove","lines":["2"]}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"insert","lines":["1"],"id":37},{"start":{"row":34,"column":44},"end":{"row":34,"column":45},"action":"insert","lines":["0"]}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["0"],"id":38},{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"remove","lines":["5"]}],[{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"insert","lines":["3"],"id":39},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["0"]}],[{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"remove","lines":["3"],"id":40}],[{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"insert","lines":["2"],"id":41}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"remove","lines":["0"],"id":42},{"start":{"row":36,"column":43},"end":{"row":36,"column":44},"action":"remove","lines":["1"]}],[{"start":{"row":36,"column":43},"end":{"row":36,"column":44},"action":"insert","lines":["5"],"id":43},{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["0"]}],[{"start":{"row":40,"column":51},"end":{"row":40,"column":52},"action":"remove","lines":["s"],"id":44},{"start":{"row":40,"column":50},"end":{"row":40,"column":51},"action":"remove","lines":["w"]},{"start":{"row":40,"column":49},"end":{"row":40,"column":50},"action":"remove","lines":["e"]},{"start":{"row":40,"column":48},"end":{"row":40,"column":49},"action":"remove","lines":["n"]}],[{"start":{"row":40,"column":48},"end":{"row":40,"column":49},"action":"insert","lines":["p"],"id":45},{"start":{"row":40,"column":49},"end":{"row":40,"column":50},"action":"insert","lines":["r"]},{"start":{"row":40,"column":50},"end":{"row":40,"column":51},"action":"insert","lines":["o"]},{"start":{"row":40,"column":51},"end":{"row":40,"column":52},"action":"insert","lines":["f"]},{"start":{"row":40,"column":52},"end":{"row":40,"column":53},"action":"insert","lines":["i"]},{"start":{"row":40,"column":53},"end":{"row":40,"column":54},"action":"insert","lines":["l"]},{"start":{"row":40,"column":54},"end":{"row":40,"column":55},"action":"insert","lines":["e"]}],[{"start":{"row":42,"column":46},"end":{"row":42,"column":47},"action":"remove","lines":["s"],"id":46},{"start":{"row":42,"column":45},"end":{"row":42,"column":46},"action":"remove","lines":["w"]},{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"remove","lines":["e"]},{"start":{"row":42,"column":43},"end":{"row":42,"column":44},"action":"remove","lines":["n"]}],[{"start":{"row":42,"column":43},"end":{"row":42,"column":44},"action":"insert","lines":["p"],"id":47},{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"insert","lines":["r"]},{"start":{"row":42,"column":45},"end":{"row":42,"column":46},"action":"insert","lines":["o"]},{"start":{"row":42,"column":46},"end":{"row":42,"column":47},"action":"insert","lines":["f"]},{"start":{"row":42,"column":47},"end":{"row":42,"column":48},"action":"insert","lines":["i"]},{"start":{"row":42,"column":48},"end":{"row":42,"column":49},"action":"insert","lines":["l"]},{"start":{"row":42,"column":49},"end":{"row":42,"column":50},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"remove","lines":["s"],"id":48},{"start":{"row":43,"column":55},"end":{"row":43,"column":56},"action":"remove","lines":["w"]},{"start":{"row":43,"column":54},"end":{"row":43,"column":55},"action":"remove","lines":["e"]},{"start":{"row":43,"column":53},"end":{"row":43,"column":54},"action":"remove","lines":["n"]}],[{"start":{"row":43,"column":53},"end":{"row":43,"column":54},"action":"insert","lines":["p"],"id":49},{"start":{"row":43,"column":54},"end":{"row":43,"column":55},"action":"insert","lines":["r"]},{"start":{"row":43,"column":55},"end":{"row":43,"column":56},"action":"insert","lines":["o"]},{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"insert","lines":["k"]}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"remove","lines":["k"],"id":50}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"insert","lines":["f"],"id":51},{"start":{"row":43,"column":57},"end":{"row":43,"column":58},"action":"insert","lines":["i"]},{"start":{"row":43,"column":58},"end":{"row":43,"column":59},"action":"insert","lines":["l"]},{"start":{"row":43,"column":59},"end":{"row":43,"column":60},"action":"insert","lines":["e"]}],[{"start":{"row":44,"column":56},"end":{"row":44,"column":57},"action":"remove","lines":["s"],"id":52},{"start":{"row":44,"column":55},"end":{"row":44,"column":56},"action":"remove","lines":["w"]},{"start":{"row":44,"column":54},"end":{"row":44,"column":55},"action":"remove","lines":["e"]},{"start":{"row":44,"column":53},"end":{"row":44,"column":54},"action":"remove","lines":["n"]}],[{"start":{"row":44,"column":53},"end":{"row":44,"column":54},"action":"insert","lines":["p"],"id":53},{"start":{"row":44,"column":54},"end":{"row":44,"column":55},"action":"insert","lines":["r"]},{"start":{"row":44,"column":55},"end":{"row":44,"column":56},"action":"insert","lines":["o"]},{"start":{"row":44,"column":56},"end":{"row":44,"column":57},"action":"insert","lines":["f"]},{"start":{"row":44,"column":57},"end":{"row":44,"column":58},"action":"insert","lines":["i"]},{"start":{"row":44,"column":58},"end":{"row":44,"column":59},"action":"insert","lines":["l"]},{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"insert","lines":["e"]}],[{"start":{"row":47,"column":72},"end":{"row":47,"column":73},"action":"remove","lines":["s"],"id":54},{"start":{"row":47,"column":71},"end":{"row":47,"column":72},"action":"remove","lines":["w"]},{"start":{"row":47,"column":70},"end":{"row":47,"column":71},"action":"remove","lines":["e"]},{"start":{"row":47,"column":69},"end":{"row":47,"column":70},"action":"remove","lines":["N"]}],[{"start":{"row":47,"column":69},"end":{"row":47,"column":70},"action":"insert","lines":["P"],"id":55},{"start":{"row":47,"column":70},"end":{"row":47,"column":71},"action":"insert","lines":["r"]},{"start":{"row":47,"column":71},"end":{"row":47,"column":72},"action":"insert","lines":["o"]},{"start":{"row":47,"column":72},"end":{"row":47,"column":73},"action":"insert","lines":["f"]},{"start":{"row":47,"column":73},"end":{"row":47,"column":74},"action":"insert","lines":["i"]}],[{"start":{"row":47,"column":74},"end":{"row":47,"column":75},"action":"insert","lines":["k"],"id":56},{"start":{"row":47,"column":75},"end":{"row":47,"column":76},"action":"insert","lines":["e"]}],[{"start":{"row":47,"column":75},"end":{"row":47,"column":76},"action":"remove","lines":["e"],"id":57},{"start":{"row":47,"column":74},"end":{"row":47,"column":75},"action":"remove","lines":["k"]}],[{"start":{"row":47,"column":74},"end":{"row":47,"column":75},"action":"insert","lines":["l"],"id":58},{"start":{"row":47,"column":75},"end":{"row":47,"column":76},"action":"insert","lines":["e"]}],[{"start":{"row":47,"column":106},"end":{"row":47,"column":107},"action":"remove","lines":["s"],"id":59},{"start":{"row":47,"column":105},"end":{"row":47,"column":106},"action":"remove","lines":["w"]},{"start":{"row":47,"column":104},"end":{"row":47,"column":105},"action":"remove","lines":["e"]},{"start":{"row":47,"column":103},"end":{"row":47,"column":104},"action":"remove","lines":["n"]}],[{"start":{"row":47,"column":103},"end":{"row":47,"column":104},"action":"insert","lines":["p"],"id":60},{"start":{"row":47,"column":104},"end":{"row":47,"column":105},"action":"insert","lines":["r"]},{"start":{"row":47,"column":105},"end":{"row":47,"column":106},"action":"insert","lines":["o"]},{"start":{"row":47,"column":106},"end":{"row":47,"column":107},"action":"insert","lines":["f"]},{"start":{"row":47,"column":107},"end":{"row":47,"column":108},"action":"insert","lines":["i"]},{"start":{"row":47,"column":108},"end":{"row":47,"column":109},"action":"insert","lines":["l"]},{"start":{"row":47,"column":109},"end":{"row":47,"column":110},"action":"insert","lines":["e"]}],[{"start":{"row":50,"column":105},"end":{"row":50,"column":106},"action":"remove","lines":["s"],"id":61},{"start":{"row":50,"column":104},"end":{"row":50,"column":105},"action":"remove","lines":["w"]},{"start":{"row":50,"column":103},"end":{"row":50,"column":104},"action":"remove","lines":["e"]},{"start":{"row":50,"column":102},"end":{"row":50,"column":103},"action":"remove","lines":["n"]}],[{"start":{"row":50,"column":102},"end":{"row":50,"column":103},"action":"insert","lines":["p"],"id":62},{"start":{"row":50,"column":103},"end":{"row":50,"column":104},"action":"insert","lines":["r"]},{"start":{"row":50,"column":104},"end":{"row":50,"column":105},"action":"insert","lines":["i"]}],[{"start":{"row":50,"column":104},"end":{"row":50,"column":105},"action":"remove","lines":["i"],"id":63}],[{"start":{"row":50,"column":104},"end":{"row":50,"column":105},"action":"insert","lines":["o"],"id":64},{"start":{"row":50,"column":105},"end":{"row":50,"column":106},"action":"insert","lines":["f"]},{"start":{"row":50,"column":106},"end":{"row":50,"column":107},"action":"insert","lines":["i"]},{"start":{"row":50,"column":107},"end":{"row":50,"column":108},"action":"insert","lines":["l"]},{"start":{"row":50,"column":108},"end":{"row":50,"column":109},"action":"insert","lines":["e"]}],[{"start":{"row":50,"column":72},"end":{"row":50,"column":73},"action":"remove","lines":["s"],"id":65},{"start":{"row":50,"column":71},"end":{"row":50,"column":72},"action":"remove","lines":["w"]},{"start":{"row":50,"column":70},"end":{"row":50,"column":71},"action":"remove","lines":["e"]},{"start":{"row":50,"column":69},"end":{"row":50,"column":70},"action":"remove","lines":["N"]}],[{"start":{"row":50,"column":69},"end":{"row":50,"column":70},"action":"insert","lines":["P"],"id":66},{"start":{"row":50,"column":70},"end":{"row":50,"column":71},"action":"insert","lines":["r"]},{"start":{"row":50,"column":71},"end":{"row":50,"column":72},"action":"insert","lines":["o"]},{"start":{"row":50,"column":72},"end":{"row":50,"column":73},"action":"insert","lines":["f"]},{"start":{"row":50,"column":73},"end":{"row":50,"column":74},"action":"insert","lines":["i"]},{"start":{"row":50,"column":74},"end":{"row":50,"column":75},"action":"insert","lines":["l"]},{"start":{"row":50,"column":75},"end":{"row":50,"column":76},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"remove","lines":["ス"],"id":67},{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"remove","lines":["ー"]},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"remove","lines":["ュ"]},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"remove","lines":["ニ"]}],[{"start":{"row":1,"column":22},"end":{"row":1,"column":28},"action":"insert","lines":["プロフィール"],"id":68}],[{"start":{"row":43,"column":66},"end":{"row":43,"column":67},"action":"remove","lines":["e"],"id":69},{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"remove","lines":["l"]},{"start":{"row":43,"column":64},"end":{"row":43,"column":65},"action":"remove","lines":["t"]},{"start":{"row":43,"column":63},"end":{"row":43,"column":64},"action":"remove","lines":["i"]},{"start":{"row":43,"column":62},"end":{"row":43,"column":63},"action":"remove","lines":["t"]}],[{"start":{"row":43,"column":62},"end":{"row":43,"column":63},"action":"insert","lines":["n"],"id":70},{"start":{"row":43,"column":63},"end":{"row":43,"column":64},"action":"insert","lines":["a"]},{"start":{"row":43,"column":64},"end":{"row":43,"column":65},"action":"insert","lines":["m"]},{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"remove","lines":["e"],"id":71},{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"remove","lines":["m"]},{"start":{"row":17,"column":92},"end":{"row":17,"column":93},"action":"remove","lines":["a"]},{"start":{"row":17,"column":91},"end":{"row":17,"column":92},"action":"remove","lines":["n"]}],[{"start":{"row":17,"column":91},"end":{"row":17,"column":92},"action":"insert","lines":["c"],"id":72},{"start":{"row":17,"column":92},"end":{"row":17,"column":93},"action":"insert","lines":["o"]},{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"insert","lines":["n"]},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"insert","lines":["d"]},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"insert","lines":["_"]}],[{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"insert","lines":["t"],"id":73},{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"insert","lines":["i"]},{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"insert","lines":["t"]},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"insert","lines":["l"]},{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":29},"end":{"row":6,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1615029726654,"hash":"bcb7a173459b9e685705a3014de0a57586392f38"}