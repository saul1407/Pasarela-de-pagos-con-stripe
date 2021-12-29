<div class="card mt-8 relative">

    <div wire:loading.flex class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
        <x-spinner size="20" />

    </div>
        <div class="card-body">
            <table class="w-full">
                <thead class="text-left">
                    <th class="w-1/2 px-4 py-2">Fechar</th>
                    <th class="w-1/4 px-4 py-2">Dolares</th>
                    <th class="w-1/4 px-4 py-2"></th>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @forelse ($invoices as $invoice)
                        <tr>
                            <td class="px-4 py-3">{{ $invoice->date()->toFormattedDateString() }}</td>
                            <td class="px-4 py-3">{{ $invoice->total() }}</td>
                            <td class="px-4 py-3 text-right"><a class="btn btn-primary"
                                    href="/user/invoice/{{ $invoice->id }}">Download</a></td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center">No tiene niguna factura</td>
                        </tr>


                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
