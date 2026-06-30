@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="py-12 text-center sm:py-16">
        <span class="inline-flex items-center rounded-full border border-zinc-200 bg-white px-3 py-1 text-xs font-medium text-zinc-600">
            Laravel 13 &middot; MySQL &middot; Tailwind
        </span>

        <h1 class="mx-auto mt-6 max-w-2xl text-4xl font-bold tracking-tight text-zinc-900 sm:text-5xl">
            Products CRUD
        </h1>

        <p class="mx-auto mt-4 max-w-xl text-base leading-relaxed text-zinc-500">
            A clean, minimal catalogue manager — create, read, update and delete products
            with server-side validation and a shadcn-inspired interface.
        </p>

        <div class="mt-8 flex items-center justify-center gap-3">
            <a href="{{ route('product.index') }}" class="btn btn-md btn-primary">View products</a>
            <a href="{{ route('product.create') }}" class="btn btn-md btn-outline">Add a product</a>
        </div>
    </section>

    <section class="mx-auto grid max-w-3xl gap-4 sm:grid-cols-3">
        <div class="card p-5">
            <h3 class="text-sm font-semibold text-zinc-900">Full CRUD</h3>
            <p class="mt-1.5 text-sm text-zinc-500">List, create, edit and delete products with clean RESTful routes.</p>
        </div>
        <div class="card p-5">
            <h3 class="text-sm font-semibold text-zinc-900">Validated</h3>
            <p class="mt-1.5 text-sm text-zinc-500">Server-side validation with inline errors and old-input repopulation.</p>
        </div>
        <div class="card p-5">
            <h3 class="text-sm font-semibold text-zinc-900">Seeded data</h3>
            <p class="mt-1.5 text-sm text-zinc-500">Ships with a realistic demo catalogue so it works out of the box.</p>
        </div>
    </section>
@endsection
