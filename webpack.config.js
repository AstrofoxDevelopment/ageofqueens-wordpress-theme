const defaultConfig = require('@wordpress/scripts/config/webpack.config');


// TODO: I'm not sure why this is still needed. Might help the wp-scripts command

module.exports = {
    ...defaultConfig,
    entry: async () => {
        const entries = await defaultConfig.entry(); // auto-detected block entries

        return {
            ...entries,
        };
    },
};
