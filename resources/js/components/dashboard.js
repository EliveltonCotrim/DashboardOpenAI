export default () => ({
    loading: false,
    genereteReport() {
        this.loading = true;

        const sizes = this.$refs.vegalitecontainer.getBoundingClientRect();

        this.$wire.generateReport()
            .then( (result) => {
                var dataset = this.$wire.get('dataset');

                result.data = dataset;
                result.height = sizes.height;
                result.width = sizes.width;

                console.log('result', dataset, sizes, dataset);

                window.vegaEmbed('#vis', result);

                this.loading = false;
            }).catch((err) =>{
                this.loading = false;
                console.log('error', err);
            })
    }
})