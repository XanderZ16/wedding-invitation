@extends('layouts.main')

@section('content')
    @include('partials.header')

    <div class="bg-gradient-to-br from-black to-[#5C0202] h-screen pt-16 px-4">
        <h1 class="text-white mx-auto max-w-4xl font-jost font-semibold text-4xl mb-4">Daftar Tamu</h1>
        <div class="w-full mx-auto max-w-4xl bg-white/30 backdrop-blur-md border border-white/20 shadow-lg rounded-lg p-4">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                            No
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                            Jumlah Kehadiran
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300/30">
                    <!-- Baris Data Tamu -->
                    @if ($guests->count() > 0)
                        @foreach ($guests as $index => $guest)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $guest->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">
                                    {{ $guest->attendance }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100 text-center"
                                colspan="3">
                                Belum ada tamu
                            </td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td class="px-6 py-3 text-xs font-medium text-gray-200 uppercase tracking-wider text-right"
                            colspan="2">
                            Total Kehadiran
                        </td>
                        <td class="px-6 py-3 text-sm font-medium text-gray-100">
                            <!-- Jumlah total kehadiran, update sesuai kebutuhan -->
                            {{ $totalAttendance }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
@endsection
