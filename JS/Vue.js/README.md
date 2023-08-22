# Vue.js

```
npm i -g @vue/cli
```
```
vue create project_name
```
<br />

## SCSS 설치
```
npm i --save-dev sass
```
```
npm i --save-dev sass-loader@10
```
```
// 이후 vue 문서 내에서
<style lang="scss" scoped>
/** **/
</style>
```
```
// 전역 설정 (App.vue)
<style lang="scss">
@import "@/assets/scss/style.scss";
</style>
```
<br />

## Delete `␍` 에러가 뜰 경우
```
npm run lint -- --fix
```
또는
```
"eslint.workingDirectories" : [
    {"mode": "auto"}
]
```
<br />

## 확장 프로그램
* Vutur - 초기 설치 시 일반 text 처럼 보이는데, 설치하면 HTML 코드처럼 하이라이트됨