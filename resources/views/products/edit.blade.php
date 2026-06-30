@extends('layouts.app')

@section('title', 'Edit product')

@section('content')
    <div class="mb-6">
        <a href="{{ route('product.index') }}" class="text-sm text-zinc-500 transition hover:text-zinc-900">&larr; Back to products</a>
        <h1 class="mt-2 text-2xl font-semibold tracking-tight">Edit product</h1>
        <p class="mt-1 text-sm text-zinc-500">Update the details for <span class="font-medium text-zinc-700">{{ $product->name }}</span>.</p>
    </div>

    <div class="card max-w-2xl p-6">
        @if ($errors->any())
            <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                <p class="font-medium">Please fix the following:</p>
                <ul class="mt-1 list-inside list-disc space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.update', ['product' => $product]) }}" method="POST" class="space-y-4">
            @csrf
            @method('put')
            <div>
                <label for="name" class="label">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="e.g. Wireless Mouse" class="input">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="qty" class="label">Quantity</label>
                    <input id="qty" type="number" name="qty" value="{{ old('qty', $product->qty) }}" placeholder="0" class="input">
                </div>
                <div>
                    <label for="price" class="label">Price</label>
                    <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" placeholder="0.00" class="input">
                </div>
            </div>

            <div>
                <label for="description" class="label">Description</label>
                <textarea id="description" name="description" rows="3" placeholder="Optional description" class="input">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="btn btn-md btn-primary">Update product</button>
                <a href="{{ route('product.index') }}" class="btn btn-md btn-outline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
