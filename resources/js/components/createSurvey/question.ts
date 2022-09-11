import { InjectionKey } from "vue";

export type QuestionController = {
    moveUp: (index: number) => void;
    moveDown: (index: number) => void;
};

export const questionControllerKey: InjectionKey<QuestionController> = Symbol();
