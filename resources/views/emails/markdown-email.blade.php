<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''" color="success">
Button Text
</x-mail::button>
    <x-mail::panel>
        This is the panel
    </x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
