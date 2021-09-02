@extends('layouts.admin')
@section('title', 'Website contacts')
@section('content')


<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card transcation-crypto" id="transcation-crypto">



			<div class="card-body p-0" id="productlist">
				<div class="table-responsive">
					<table class="table text-nowrap" id="pproductlist">
						<thead class="border-top">
							<tr>
								<th class="bg-transparent">Date</th>
								<th class="bg-transparent">Name</th>
								
								<th class="bg-transparent">Email</th>
								<th class="bg-transparent">phone</th>
								<th class="bg-transparent">address</th>
								<th class="bg-transparent">Product Req</th>
								<th class="bg-transparent">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($inspectrequests as $ins)
							<tr class="border-bottom-0">
		
								<td class="text-muted fs-15 font-weight-semibold">{{ $ins->created_at }}</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $ins->name }}</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $ins->email }}</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $ins->phone }}</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $ins->address }}</td>
								<td class="text-muted fs-15 font-weight-semibold"><a href="{{ route('admin.updateproduct', ['slug' => $ins->product->slug ])}}" class="btn btn-warning btn-sm ">{{ $ins->product->title }}</a></td>
								<td class="text-muted fs-15 font-weight-semibold">Later</td>
								
					
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection