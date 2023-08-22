@foreach ($pasucFiles as $index => $file)
    <tr class="hover:bg-gray-100">
        <td class="py-4 px-4">{{ $index + 1 }}</td>
        <td class="py-4 px-4">{{ $file->title }}</td>
        <td class="py-4 px-4">{{ $file->cycle }}</td>
        <td class="py-4 px-4">{{ $file->kra }}</td>
        <td class="py-4 px-4">{{ $file->criteria }}</td>
        <td class="py-4 px-4">{{ $file->inclusive_date }}</td>
        <td class="py-4 px-4">{{ $file->accomplishment_name }}</td>
        <td class="py-4 px-4">{{ $file->date_submitted }}</td>
        <td class="py-4 px-4">{{ $file->eval_status }}</td>
        <td class="py-4 px-4">
            <div class="flex justify-between w-full space-x-4">
            <button class="flex-1 px-4 py-2 bg-blue-500 text-white hover:bg-blue-700 rounded-md">View</button>
            <button class="flex-1 px-4 py-2 bg-yellow-300 text-black hover:bg-yellow-500 rounded-md">Edit</button>
                @if ($file->eval_status === '-')
                    @if ($file->is_submitted)
                    <button class="cursor-not-allowed flex-1 px-4 py-2 bg-purple-500 text-white hover:bg-purple-700 rounded-md" disabled>Submitted</button>
                    @else
                    <button class="flex-1 px-4 py-2 bg-green-500 text-white hover:bg-green-700 rounded-md" onclick="applyFile('{{ $file->pasuc_id }}')">Submit</button>    
                    @endif
                @else 
                <button class="cursor-not-allowed flex-1 px-4 py-2 bg-gray-500 text-white hover:bg-gray-700 rounded-md" disabled>{{$file->eval_status}}</button>
                @endif
                <button class="flex-1 px-4 py-2 bg-purple-500 text-white hover:bg-purple-700 rounded-md flex items-center">
                <i class="fas fa-plus-circle mr-2"></i> Add Supporting Documents
                </button>
            </div>
        </td>
    </tr>
@endforeach