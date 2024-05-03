<div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm mr-1" title="Lihat"><i class="bi bi-eye"></i> Lihat</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm mr-1" title="Edit"><i class="bi bi-pencil"></i> Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda yakin ingin menghapus produk ini?')" title="Hapus"><i class="bi bi-trash"></i> Hapus</button>
    </form>
</div>
