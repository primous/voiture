import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Global modal and interactive store
Alpine.store('leadModal', {
    open: false,
    vehicleTitle: 'Sélectionnez un véhicule',
    purpose: 'essai', // 'essai' or 'reprise'
    
    openTestDrive(vehicle = 'Sélectionnez un véhicule') {
        this.vehicleTitle = vehicle;
        this.purpose = 'essai';
        this.open = true;
    },
    
    openTradeIn(vehicle = '') {
        this.vehicleTitle = vehicle || 'Mon véhicule actuel';
        this.purpose = 'reprise';
        this.open = true;
    },
    
    close() {
        this.open = false;
    }
});

Alpine.start();
