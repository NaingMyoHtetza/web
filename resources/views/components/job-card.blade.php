@props(['job'])
<x-panel class="flex flex-col text-center">

            <div class="self-start text-sm">{{$job->employer->name}}</div>

            <div class="py">
                <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
                    <a href="{{$job->url}}" target="_black">
                    {{$job->title}}
                    </a>
                </h3>
                <p class="text-sm mt-4">{{$job->salary}}</p>
            </div>

            <div class="flex justify-between text-center mt-4">
                <div>
                    @foreach($job->tags as $tag)
                    <x-tag :$tag size="small"></x-tag>
                    @endforeach
                </div>

              <x-employer-logo :employer="$job->employer" :width="42"></x-employer-logo>
            </div>
</x-panel>