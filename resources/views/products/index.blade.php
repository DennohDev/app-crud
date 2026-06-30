@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="mb-6 flex items-end justify-between gap-4">
        <div>
            <h1 class="text-2xl font-semibold tracking-tight">Products</h1>
            <p class="mt-1 text-sm text-zinc-500">Manage your product catalogue.</p>
        </div>
        <a href="{{ route('product.create') }}" class="btn btn-md btn-primary">
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z"/></svg>
            New product
        </a>
    </div>

    <div class="card overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-zinc-200 bg-zinc-50 text-left text-xs font-semibold uppercase tracking-wide text-zinc-500">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Qty</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-100">
                @forelse ($products as $product)
                    <tr class="hover:bg-zinc-50">
                        <td class="px-4 py-3 text-zinc-500">#{{ $product->id }}</td>
                        <td class="px-4 py-3 font-medium text-zinc-900">{{ $product->name }}</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-zinc-100 px-2 py-0.5 text-xs font-medium text-zinc-700">{{ $product->qty }}</span>
                        </td>
                        <td class="px-4 py-3 tabular-nums text-zinc-700">${{ number_format($product->price, 2) }}</td>
                        <td class="max-w-xs truncate px-4 py-3 text-zinc-600">{{ $product->description }}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-sm btn-outline">Edit</a>
                                <form action="{{ route('product.delete', ['product' => $product]) }}" method="POST" onsubmit="return confirm('Delete “{{ $product->name }}”?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-destructive">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-12 text-center text-sm text-zinc-500">
                            No products yet.
                            <a href="{{ route('product.create') }}" class="font-medium text-zinc-900 underline underline-offset-2">Create your first product</a>.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
