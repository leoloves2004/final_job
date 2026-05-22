<h1>Job Listings</h1>
<a href="/jobs/create">Add New Job</a>

@foreach ($jobs as $job)
    <h2>
        {{ $job->title }}
    </h2>

    <p>Company: {{ $job->company }}</p>
    <p>Location: {{ $job->location }}</p>
    <p>Salary: ₱{{ number_format($job->salary, 2) }}</p>

    <hr>
@endforeach