<div x-data>
    <div class="flex justify-end ">
        <button class="px-4 flex space-x-2 py-1.5 rounded-xl bg-gray-500 hover:bg-gray-600 text-white"
            @click="printOut($refs.printContainer.outerHTML);">
            <span>Print</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-printer-check">
                <path d="M13.5 22H7a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v.5" />
                <path d="m16 19 2 2 4-4" />
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2" />
                <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            </svg>
        </button>
    </div>
    <div class="mt-5">
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y border divide-neutral-200" x-ref="printContainer">
                            <thead>
                                <tr class="text-neutral-500">
                                    <th class="px-5 py-3 text-xs font-medium text-left uppercase">PAID AMOUNT</th>
                                    <th class="px-5 py-3 text-xs font-medium text-left uppercase">CREATED AT</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200">
                                @forelse ($getRecord()->appointmentPayments as $item)
                                    <tr class="text-neutral-800">
                                        <td class="px-5 py-2 text-sm font-medium whitespace-nowrap">
                                            &#8369;{{ number_format($item->paid_amount, 2) }}
                                        </td>
                                        <td class="px-5 py-2 text-sm whitespace-nowrap">
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
