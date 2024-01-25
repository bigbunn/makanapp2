<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Data Makan" icon="bi bi-archive">
        <x-maz-sidebar-sub-item name="Buat Baru" :link="route('datamakan.buat')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Lihat Data" :link="route('datamakan.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
    <x-maz-sidebar-item name="Pantangan" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Ajukan" :link="route('pantangan.pengajuan')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Lihat Data" :link="route('pantangan.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
    <x-maz-sidebar-item name="Keluhan" icon="bi bi-info">
        <x-maz-sidebar-sub-item name="Laporkan" :link="route('keluhan.laporan')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Lihat Data" :link="route('keluhan.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
    <x-maz-sidebar-item name="Puasa" icon="bi bi-clock">
        <x-maz-sidebar-sub-item name="Daftar" :link="route('puasa.daftar')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Lihat Data" :link="route('puasa.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>
</x-maz-sidebar>