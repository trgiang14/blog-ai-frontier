@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if (Auth::check() && Auth::user() && Auth::user()->usertype == 'admin')
            {{ __('Admin Dashboard') }}
        @else
            {{ __('User Dashboard') }}
        @endif
    </h2>
@endsection

@section('content')
    <div class="py-12 bg-gray-100 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">📝 Thêm bài viết mới</h1>

            {{-- Hiển thị thông báo khi đăng bài thành công --}}
            @if (session('status'))
                <div class="mb-4 text-green-600 font-medium bg-green-50 border border-green-200 rounded-lg p-3 text-center">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Form thêm bài viết --}}
            <form action="{{ route('admin.createpost') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                {{-- Tiêu đề --}}
                <div>
                    <label for="title" class="block text-gray-700 font-medium mb-2">Tiêu đề</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Nhập tiêu đề bài đăng"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Nội dung --}}
                <div>
                    <label for="description" class="block text-gray-700 font-medium mb-2">Nội dung</label>
                    <textarea id="description" name="description" rows="5" placeholder="Viết nội dung bài đăng..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Ảnh --}}
                <div>
                    <label for="image" class="block text-gray-700 font-medium mb-2">Ảnh minh họa</label>
                    <input type="file" id="image" name="image" accept="image/*"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Nút submit --}}
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-6 rounded-lg shadow-md transition">
                        Đăng bài
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
