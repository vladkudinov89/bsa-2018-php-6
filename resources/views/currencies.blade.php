<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>ShortName</th>
        <th>Course</th>
        <th>ActualCourseDate</th>
        <th>IsActive</th>
    </tr>
    </thead>
    <tbody>
    <?php print_r($repos); ?>
    @foreach($repos as $p)
        <tr>
            <td>{{$p->getId()}}</td>
            <td>{{$p->getName()}}</td>
            <td>{{$p->getShortName()}}</td>
            <td>{{$p->getActualCourse()}}</td>
            <td>{!! $p->getActualCourseDate()->format('Y-m-d H-i-s') !!}</td>
            <td>{{$p->isActive() ? 1 : 0}}</td>


        </tr>
    @endforeach

    </tbody>
</table>