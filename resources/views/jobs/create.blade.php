<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">

        <x-forms.input label="Job Title" name="title" placeholder="Job Title"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="Salary"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Location"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="URL"></x-forms.input>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags(common separated)" name="tags" placeholder="Laracasts,video,education"></x-forms.input>
        <x-forms.button>Publish</x-forms.button>
    
    </x-forms.form>
</x-layout>