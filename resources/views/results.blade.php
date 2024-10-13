<x-layout>
    <section>
    <x-page-heading>Searching Result</x-page-heading>
        <div class="space-y-6">
            @foreach($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
            @endforeach
        </div>
    
</x-layout>