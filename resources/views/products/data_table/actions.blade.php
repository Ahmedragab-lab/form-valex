{{-- @if (auth()->user()->hasPermission('update_users')) --}}
    <a href="{{ route('product.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('تعديل')</a>
{{-- @endif --}}

{{-- @if (auth()->user()->hasPermission('delete_users')) --}}
    <form action="{{ route('product.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        {{-- <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> @lang('site.delete')</button> --}}

        <button type="button" class="btn btn-danger btn-sm delete"
             onclick="confirm('{{ __('هل متاكد من عمليه حذف المنتج') }}') ? this.parentElement.submit() : ''">
             <i class="fa fa-trash"></i>
            {{ __('حذف') }}
        </button>
    </form>
{{-- @endif --}}
