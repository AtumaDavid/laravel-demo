<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                    {{ $job['title'] }}: pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
