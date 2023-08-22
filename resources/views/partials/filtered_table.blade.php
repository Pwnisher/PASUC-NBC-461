@foreach ($eqarFiles as $index => $file)
    <tr class="hover:bg-gray-100">
        <td class="py-4 px-6">{{ $loop->iteration + ($eqarFiles->perPage() * ($eqarFiles->currentPage() - 1)) }}</td>
        <td class="py-4 px-6">{{ $file->title }}</td>
        <td class="py-4 px-6">{{ $file->inclusive_date }}</td>
        <td class="py-4 px-6">{{ $file->accomplishment_name }}</td>
        <td class="py-4 px-6">{{ $file->department_section }}</td>
        <td class="py-4 px-6">{{ $file->qar_type }}</td>
        <td class="py-4 px-6">{{ $file->date_submitted }}</td>
        <td class="py-4 px-6">{{ $file->status }}</td>
        <td class="py-4 px-6">
            <div class="flex justify-between w-full space-x-4">
                @if ($file->status === 'Pending')
                    <button class="cursor-not-allowed flex-1 px-4 py-2 bg-gray-500 text-white hover:bg-gray-700 rounded-md" disabled>Pending</button>
                @elseif ($file->status === 'Qualified')
                    @if ($file->is_applied)
                    <button class="cursor-not-allowed flex-1 px-4 py-2 bg-purple-500 text-white hover:bg-purple-700 rounded-md" disabled>Applied</button>
                    @else
                    <button class="flex-1 px-4 py-2 bg-green-500 text-white hover:bg-green-700 rounded-md" onclick="applyFile('{{ $file->eqar_id }}')">Apply</button>    
                    @endif
                @endif
            </div>
        </td>
    </tr>
@endforeach