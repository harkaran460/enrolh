@component('mail::message')
# Hello Admin,

You have got a new note details are mention below.

<table class="table" border="1" width="100%">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">App Id</th>
        <th scope="col">Title</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$student_name}}</td>
        <td>{{$appid}}</td>
        <td>{{$title}}</td>
        <td>{{$notes}}</td>
      </tr>
    </tbody>
  </table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
