import { InjectionKey } from "vue";
type questionController = {
    moveUp: () => void;
    moveDown: () => void;
};

export const quesetionControllerKey: InjectionKey<questionController> =
    Symbol();
