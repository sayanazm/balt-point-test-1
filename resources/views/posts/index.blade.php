<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Posts</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .create-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 14px;
            background: #222;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f3f3f3;
            text-align: left;
        }

        th,
        td {
            border: 1px solid #dcdcdc;
            padding: 12px;
            vertical-align: top;
        }

        tr:nth-child(even) {
            background: #fafafa;
        }
    </style>
</head>
<body>

<h1>Posts</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created at</th>
    </tr>
    </thead>

    <tbody>
    @forelse($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>

            <td>
                {{ $post->category->name }}
            </td>

            <td>
                {{ $post->title }}
            </td>

            <td>
                {{ $post->content }}
            </td>

            <td>
                {{ $post->created_at->format('d.m.Y H:i') }}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">
                No posts found
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>
