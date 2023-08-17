import myJson from "../data/data.json" assert { type: "json" };

const project_name = {
    data: myJson.result,
    import() {
        const $data_role_import = document.querySelectorAll("[data-role-import]");
        const data = {
            header: `<h1>test</h1>`,
            footer: `<p>copyright</p>`,
        };
        $data_role_import.forEach((el) => {
            const target = "data." + el.getAttribute("data-role-import");
            el.innerHTML = eval(target);
        });
    },
    init() {
        this.import();
    },
};
project_name.init();
