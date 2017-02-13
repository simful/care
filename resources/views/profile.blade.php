@extends('layouts.app')
@section('content')
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#identitas" aria-controls="identitas" role="tab" data-toggle="tab"><span class="fa fa-file"> Identitas </span></a></li>
    <li role="presentation"><a href="#kunjungan" aria-controls="kunjungan" role="tab" data-toggle="tab"> <span class="fa fa-ambulance"></span> Kunjungan</a></li>
    <li role="presentation"><a href="#r_obat" aria-controls="r_obat" role="tab" data-toggle="tab"> <span class="fa fa-medkit"></span> Obat/Tndakan</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane in active" id="identitas">
    	<div class="panel panel-default">
    		<div class="panel-body">
    			<table class="table table-striped table-bordered">
    			@foreach($find as $f)
    				<tr>
    					<td style="width: 13%;">No Rekam Medis</td>
    					<td style="width: 3%;">:</td>
    					<td>{{$f->med_rec}}</td>
    				</tr>
    				<tr>
    					<td>No KTP</td>
    					<td>:</td>
    					<td>{{$f->ktp}}</td>
    				</tr>
    				<tr>
    					<td>Nama</td>
    					<td>:</td>
    					<td>{{$f->name}}</td>
    				</tr>
    				<tr>
    					<td>Tanggal Lahir</td>
    					<td>:</td>
    					<td>{{$f->birth_date}}</td>
    				</tr>
    				<tr>
    					<td>Jenis Kelamin</td>
    					<td>:</td>
    					<td>{{$f->gender}}</td>
    				</tr>
    				<tr>
    					<td>Pekerjaan</td>
    					<td>:</td>
    					<td>{{$f->job}}</td>
    				</tr>
    				<tr>
    					<td>Agama</td>
    					<td>:</td>
    					<td>{{$f->religion}}</td>
    				</tr>
    				<tr>
    					<td>Alamat</td>
    					<td>:</td>
    					<td>{{$f->address}}</td>
    				</tr>
    				@endforeach
    			</table>
    		</div>
    	</div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="kunjungan">
    	<div class="panel panel-default">
    		<div class="panel-body">
    			@if(count($visits)>0)
    			<table>
    				<thead>
    					
    				</thead>
	    			@foreach($visits as $v)
	    			<tr></tr>
	    			@endforeach
	    			@else
	    			<tr><td>Belum ada data</td></tr>
    			</table>
    			@endif
    		</div>
    	</div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="r_obat">
    	<div class="panel panel-default">
    		<div class="panel-body">
		    	@if(count($drug)>0)
		    	<table>
		    		<thead></thead>
	    			@foreach($drug as $d)
		    		<tr></tr>
	    			@endforeach
	    			@else
	    			<tr><td>Belum ada data</td></tr>
		    	</table>
		    	@endif
    		</div>
    	</div>
    </div>
    
  </div>

</div>
@endsection