<div class="py-12">
    <div class="w-full mx-auto sm:px-6 lg:px-9">
        <div class="px-4 sm:px-6 lg:px-8">
            <x-heading title="Sales" description="A list of all sales."/>

            <div class="w-full overflow-hidden md:rounded-lg">
                <livewire:table resource="Sale" :columns="[
                    ['label' => 'Seller', 'column' => 'saller.user.name'],
                    ['label' => 'Client', 'column' => 'client.user.name'],
                    ['label' => 'Sold at', 'column' => 'sold_at'],
                    ['label' => 'Status', 'column' => 'status'],
                    ['label' => 'Total Amount', 'column' => 'total_amount'],
                ]" editRoute="#" eleteRoute="#">
                </livewire:table>
            </div>
        </div>
    </div>
</div>
