module.exports = {
    "roots": [
        "<rootDir>/resources/js/tests"
    ],
    "moduleFileExtensions": [
        "js",
        "json",
        "vue"
    ],
    "transform": {
        ".*\\.(vue)$": "@vue/vue2-jest",
        "^.+\\.js$": "<rootDir>/node_modules/babel-jest"
    },
    "moduleNameMapper": {
        "^@/(.*)$": "<rootDir>/resources/js/components/$1"
    },
    testEnvironment: "jsdom"
}
