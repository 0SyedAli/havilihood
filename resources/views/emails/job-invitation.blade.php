<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job Invitation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
<div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
    <h2 style="color: #0056b3;">Job Invitation – {{$data['job']->title}} at {{$data['job']->user?->recruiter_info?->company->name ?? $data['job']->user->company?->name}}</h2>

    <p>Dear <strong>{{$data['candidate']->user->name}}</strong>,</p>

    <p>I hope this message finds you well.</p>

    <p>
        We are pleased to invite you to explore an exciting career opportunity with <strong>{{$data['job']->user?->recruiter_info?->company?->name ?? $data['job']->user?->company?->name}}</strong>.
        After reviewing your background and experience, we believe you could be a great fit for the position of
        <strong>{{$data['job']->title}}</strong> on our team.
    </p>

    <h3 style="color: #0056b3;">Job Details:</h3>
    <ul>
        <li><strong>Position:</strong> {{$data['job']->job_position}}</li>
        <li><strong>Job Type:</strong> {{$data['job']->job_type}}</li>
        <li><strong>Start Date:</strong> [Expected Start Date]</li>
        <li><strong>Salary Range:</strong> ${{$data['job']->salary_start}} - ${{$data['job']->salary_end}} {{$data['job']->pay_period}}</li>
    </ul>

    <p>
        {!! $data['job']->description !!}
    </p>

    <p>
        Best regards,<br>
        <strong>{{$data['job']->user->name}}</strong><br>
        {{$data['job']->user->recruiter_info->job_title ?? "Company Owner"}}<br>
        <a href="mailto:{{$data['job']->user->recruiter_info->work_email ?? $data['job']->user->company->work_email}}" style="color: #0056b3;">{{$data['job']->user->recruiter_info->work_email ?? $data['job']->user->company->work_email}}</a><br>
        <a href="{{$data['job']->user->recruiter_info->company->website ?? $data['job']->user->company->website}}" target="_blank" style="color: #0056b3;">{{$data['job']->user->recruiter_info->company->website ?? $data['job']->user->company->website}}</a>
    </p>
</div>
</body>
</html>
