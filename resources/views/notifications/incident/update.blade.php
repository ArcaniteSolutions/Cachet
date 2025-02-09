@component('mail::message')
# {{ trans('notifications.incident.update.mail.title', ['name' => $incidentName, 'new_status' => $newStatus])  }}

{{ $update->message }}

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

{{ trans('notifications.common.salutation') }}<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
