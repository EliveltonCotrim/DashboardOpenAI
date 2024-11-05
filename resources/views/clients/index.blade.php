<x-app-layout>
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-9">
            <div class="px-4 sm:px-6 lg:px-8">
                <x-heading title="Client" description="A list of all the clients." btn-label="Add Client"
                    :route="route('clients.create')"/>

                <div class="w-full overflow-hidden md:rounded-lg">
                    <livewire:table resource="Client" :columns="[
                        ['label' => 'Client', 'column' => 'user.name'],
                        ['label' => 'Email', 'column' => 'user.email'],
                        ['label' => 'City', 'column' => 'address.city'],
                        ['label' => 'State', 'column' => 'address.state'],
                    ]" editRoute="clients.edit"
                        eleteRoute="clients.destroy">
                    </livewire:table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
